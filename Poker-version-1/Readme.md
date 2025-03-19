# ![Game poker]

It is a texas hold'em poker game for a maximum of 6 players who will place their bets in the currency called "mXMR".

## Dependences 

This game and its pages have the following dependencies for their full operation:

1. inuitcss Version 6.0.0
2. sass Version 1.58.3 

To install the dependencies, in your terminal enter the following command:

```
npm install
```

## Game scss folder directory

* `public/stylesheets/settings`: Css folder containing the colors and global variables of the game components.
* `public/stylesheets/components`: Css folder containing the visual components of the game and the pages.
* `public/stylesheets/elements`: Css folder containing the elements styles of the pages and game.
* `public/stylesheets/generic`: Css folder containing the generic styles used in the game and pages.
* `public/stylesheets/tools`: Css folder containing the tools used in the game and pages.
* `public/stylesheets/utilites`: Css folder containing the tools used in the game and pages.
* `public/stylesheets/objects`: Css folder containing the tools used in the game and pages.



## Game scss file directory

### elements

* `/_elements`: elements used in the game and pages.

### objects

* `/_objects.block`: Contains the objects used for containers.
* `/_objects.layout`:Contains the objects used for layouts .
* `/_objects.margin`: Contains the objects used for margin.
* `/_objects.padding`:Contains the objects used for padding .
* `/_objects.media`: Contains the objects used for images.

### settings

* `/_setting.colors`: Color variables of the visual components of the graphical interface of the game.

* `/_setting.global`: Variables of height, width, number of players of the components of the graphical interface of the game.
* `/_setting.core`: This core file sets up inuitcss’ most important setup variables. They underpin a lot of how the framework functions and should be modified and preconfigured with caution.

### tools

* `/_tools.font-size`: Font size used in the game and the pages.
* `/_tools.mixin`:Mixins used in the game.

### Components

* `/components.buttons-game.scss`: They contain the styles of the buttons that compose the graphical interface of the game.
* `/components.buttons.scss`: They contain the styles of the buttons that compose the pages.
* `/components.hand.scss`: They contain the styles of the winning hand and the graphical interface of the game.
* `/components.player.scss`:They contain the styles of the cards and identifiers of each player that make up the graphical interface of the game.
* `/components.timer.scss`:They contain the timer styles of each player.
* `/components.chat.scss`:They contain the styles of the chat.
* `/components.pot.scss`:They contain the styles of the pot.
* `/components.header.scss`:They contain the styles of the header's pages.
* `/components.question.scss`:They contain the styles of the frequentely asked questions pages.
* `/components.contact.scss`:They contain the styles of contact pages.
* `/components.info.scss`:They contain the styles of section info of the pages.
* `/components.modal__box.scss`:They contain the styles of modal boxes in the pages.
* `/components.tables.scss`:contains the available table styles of the game.
* `/components.language.scss`:They contains the language menu styles .
* `/components.navegation.scss`:They contain the styles of navigation menu.

## Main css files

The main game files are as follows:
```
 game.css
 style.css
```

###  [`game.scss`] ()

This file is the main file of the game, since it is responsible for importing the colors, variables, components and rounds of the game. This file must be embedded in the archive:

1. public/game.html

To compile the file, enter these instructions in the terminal:

```
npm run sass public/stylesheets/game.scss public/stylesheets/game.css
```
```
sass public/stylesheets/game.scss public/stylesheets/game.css
```

###  [`style.scss`] ()

This file contains the styles of the game pages. This file must be embedded in the archive:

1. public/contact-en.html
2. public/index-en.html
3. public/login-en.html
4. public/table-en.html
5. public/transaccion-en.html

To compile the file, enter these instructions in the terminal:

```
npm run sass public/stylesheets/style.scss public/stylesheets/style.css
```
```
sass public/stylesheets/style.scss public/stylesheets/style.css
```







