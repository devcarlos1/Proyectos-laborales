<?php

namespace App\Services\User;

use App\Models\DiscountCode;
use App\Models\Service;

class CartService
{
    public function getCart(): array
    {
        return session('cart', []);
    }

    public function addToCart(Service $service): int
    {
        $cart = $this->getCart();
        if (isset($cart[$service->id])) {
            $cart[$service->id]['count']++;
        } else {
            $cart[$service->id]['count'] = 1;
            $cart[$service->id]['service'] = $service;
        }
        session()->put('cart', $cart);
        return $cart[$service->id]['count'];
    }

    public function removeFromCart(Service $service): int
    {
        $cart = $this->getCart();
        if (isset($cart[$service->id])) {
            if ($cart[$service->id]['count'] > 1) {
                $cart[$service->id]['count']--;
            } else {
                unset($cart[$service->id]);
            }
        }
        session()->put('cart', $cart);
        return isset($cart[$service->id]) ? $cart[$service->id]['count'] : 0;
    }

    public function clearCart(): void
    {
        session()->put('cart', []);
    }

    public function getCartPrice(): int
    {
        $cart = $this->getCart();
        $price = 0;
        foreach ($cart as $item) {
            $price += $item['service']->price * $item['count'];
        }
        return $price;
    }

    public function getPrice($cart, ?DiscountCode $discount): int
    {
        usort($cart, function ($a, $b) {
            return $a['service']->price < $b['service']->price;
        });

        $price = 0;
        foreach ($cart as $service) {
            $i = $service['count'];
            while ($i > 0) {
                if ($discount) {
                    if ($discount->limit === null || $discount->limit > $discount->uses) {
                        if ($discount->valid_for_service && $discount->valid_for_service == $service['service']->id) {
                            $price += $service['service']->price * (1 - $discount->amount / 100);
                            $discount->uses++;
                        } else if (!$discount->valid_for_service) {
                            $price += $service['service']->price * (1 - $discount->amount / 100);
                            $discount->uses++;
                        } else {
                            $price += $service['service']->price;
                        }
                    } else {
                        $price += $service['service']->price;
                    }
                } else {
                    $price += $service['service']->price;
                }
                $i--;
            }
        }
        return $price;
    }
}
