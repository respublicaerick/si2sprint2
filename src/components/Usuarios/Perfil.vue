<template>
  <div>
    <b-loading :is-full-page="true" v-model="cargando" :can-cancel="false"></b-loading>

    <section class="hero is-hero-bar is-main-hero">
      <div class="hero-body">
        <div class="level">
          <div class="level-left">
            <div class="level-item is-hero-avatar-item">
              <div class="image is-user-avatar">
                <img src="../../assets/usuario.png" alt="" />
              </div>
            </div>
          </div>
          <div class="level-item is-hero-content-item">
            <div>
              <h1 class="title is-spaced">Perfil de {{ nombreUsuario }}</h1>
            </div>
          </div>
          <div class="level-right">
            <div class="level-item">
              <b-button
                type="personalizado"
                size="is-large"
                icon-left="lock"
                class="is-pulled-right"
                tag="router-link"
                to="/cambiar-password"
              >
                Cambiar contraseña
              </b-button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br />

    
 </div>
</template>

<style>
section.hero.is-hero-bar.is-main-hero {
  background-image: url("../../assets/fondo.png");
  background-size: cover;
}

section.hero.is-hero-bar.is-main-hero img {
  width: 6rem;
  height: 6rem;
  border-radius: 9999px;
  background-color: green;
}
</style>