<footer>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/logo/logo__completo.svg" alt=""></a>
        <p class="roboto-light">info@superkoolautos.com</p>
        <p class="roboto-light">
            1150 Nw 72nd Ave Tower I Ste 455 <br>
 Num 8489 Miami  <br>
33126
        </p>
      <p class="roboto-light">© SUPER KOOL AUTOS LLC. All Right Reserved. Dev by <a href="https://www.linkedin.com/in/carlos-julio-ciccone-jimenez-757a7b1b9/" target="_blank" style="color:var(--color-3);">Carlos Ciccone</p></a>
    </footer>
    <?php wp_footer();?>
</body>
</html>
<script>
        const btn__menu__desplegable = document.querySelector(".header__izq__btn__menu");
  const menu__desplegable = document.querySelector('.menu-desplegable');
  const btn__menu__desplegable__activo= document.querySelector('.menu-desplegable__menu__contenedor-salir__btn');
  const elementos__menu__desplegable__activo= document.querySelectorAll('.menu-desplegable__menu__lista__item')
  verificar=false;
  
  btn__menu__desplegable.addEventListener('click', ()=>{ 
      if(!verificar){ 
        menu__desplegable.classList.remove("invisible");  
        verificar=true;
      }
    });
  
  btn__menu__desplegable__activo.addEventListener('click',()=>{
      if(verificar){
          menu__desplegable.classList.add("invisible");
        verificar=false;
      }
  } );
  
  elementos__menu__desplegable__activo.forEach((elemento)=>{
         elemento.addEventListener('click', ()=>{
          menu__desplegable.classList.add("invisible");
        verificar=false;
         })
  })
      </script>