// resources/assets/js/components/ChatMessages.vue

<template>
  <!-- <div class="container">
  <div class="header">
    <div class="grp-img">
      <img class="i1" src="https://images.unsplash.com/photo-1660476705851-21e527337f9a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHwxOHx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
      <img class="i2" src="https://images.unsplash.com/photo-1657299143482-4f4ea1ebd71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
      <img class="i3" src="https://images.unsplash.com/photo-1660481451479-7ad6d6ad0223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
    </div>

    <div class="grp-info">
      <h3 class="grp-name">
        Elnora, Lelia, Lucinda
      </h3>
      <p class="grp-status">
        We tipically reply in a few minut
      </p>
    </div>
  </div>

  <div class="chatbox" v-for="message in messages" :key="message.id">
    <div class="chat" v-if="message.user_id == message.user.id">
      <img src="https://images.unsplash.com/photo-1657299143482-4f4ea1ebd71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
      <p class="msg">
        <ion-icon name="caret-back-outline"></ion-icon>
        <strong class="pt-3">{{ message.user.name }}</strong><br><span> {{message.message}}  </span> 
      <strong class="pt-3"></strong>
      </p>
    </div>
    <div class="chat" v-else>
      <img src="https://images.unsplash.com/photo-1660481451479-7ad6d6ad0223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
      <p class="msg">
        <ion-icon name="caret-back-outline"></ion-icon>
        <strong class="pt-3">{{ message.user.name }}</strong><br> <span> {{message.message}}  </span> 
      </p>
    </div>
      <img src="https://images.unsplash.com/photo-1657299143482-4f4ea1ebd71c?ixlib=rb-1.2.1&ixid=MnwxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwxMXx8fGVufDB8fHx8&auto=format&fit=crop&w=500&q=60" alt="">
      <p class="msg">
        <ion-icon name="caret-back-outline"></ion-icon>
        <strong class="pt-3">{{ message.user.name }}</strong><br> <span> {{message.message}}  </span> 
      </p>
    </div>
    <div class="chat">
      <img src="https://images.unsplash.com/photo-1660481451479-7ad6d6ad0223?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw3fHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
      <p class="msg">
        <ion-icon name="caret-back-outline"></ion-icon>
        {{message.message}} 
      </p>
    </div> -->
  <!-- </div>
  </div> --> 

  <div class="outerbg" ref="chatContainer">
<div class></div>
  <div class="chatboxout">
    <div class="chatboxin" v-for="message in messages" :key="message.id">


      <div class="chat-container" v-if="message.user_id === message.user.id">
        <!-- <div class="chat-sender img"><img src="https://s24.postimg.org/7h2ei80qd/sahil_chat_avatar_08.png"></div> -->
        <div class="chat-sender msg"><strong>{{ message.user.name }}</strong>
          <div class="chatmsg">{{ message.message }}</div>
        </div>
      </div>


      

      


      <div class="chat-container" v-else>
        <div class="chat-respond msg">
          <div class="flippd">
            <strong>{{ message.user.name }}</strong>
            <div class="chatmsg"> {{ message.message }}
              <span class="date">{{ message.user.created_at }}</span>
            </div>
          </div>
        </div>
        <!-- <div class="chat-respond img"><img src="https://s24.postimg.org/j4ruz10hh/chat_avatar_09.png"></div> -->
      </div>


    </div>
  </div>
</div>
</template>

<script>
export default {
  props: ["messages"],
};
</script>

<style scoped>
.date{
  margin-right: auto;
}
.outerbg {
  width: 100%;
  margin: 20px;
  padding: 30px 0;
  margin: 0 auto;
  background-color: inherit;
  /* background: url('https://s24.postimg.org/63armx1h1/sahil_sahil_chatsbg.png'); */
  background-repeat: no-repeat;
  background-size: 100% 100%;
}

.chatboxout {
  font-family: open sans;
  font-size: 12px;
  line-height: 17px;
  box-sizing: border-box;
  max-width: 800px;
  margin: 0 auto;
  padding: 5px;
  background: inherit;
  border-radius: 5px;
  -webkit-box-shadow: 4px 4px 20px -1px rgba(59, 59, 59, 0.6);
  -moz-box-shadow: 4px 4px 20px -1px rgba(59, 59, 59, 0.6);
  /* box-shadow: 4px 4px 20px -1px rgba(59, 59, 59, 0.6); */
  /* box-shadow: 4px 4px 20px -1px rgba(10, 10, 10, 0.282); */
}

.chatboxin {
  box-sizing: border-box;
  /* border: 0.5px solid rgba(208, 208, 208, 1); */
  border-radius: 5px;
  padding: 5px 15px;
  box-shadow: 4px 4px 20px -1px rgba(89, 178, 216, 0.6);
}

.chat-sender.msg {
  -webkit-clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
  clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
  padding: 9px 9px;
  padding-left: 21px;
  box-shadow: 4px 4px 20px -1px rgba(89, 178, 216, 0.6);
  background-color: #fff;
  color: #7b7979;
  box-sizing: border-box;
  width: calc(100% - 53px);
  margin-left: -9px;
}

.chatmsg {
  margin-top: 2px;
}

.chat-sender {
  display: inline-block;
  vertical-align: top;
}

.chat-container {
  margin-top: 15px;
  margin-bottom: 15px;
    animation: fadein 2s;
    -moz-animation: fadein 2s; /* Firefox */
    -webkit-animation: fadein 2s; /* Safari and Chrome */
    -o-animation: fadein 2s; /* Opera */
}

.chat-respond.msg {
  -webkit-clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
  clip-path: polygon(12px 0, 100% 0, 100% 100%, 0 100%, 12px 70%);
  padding: 9px 9px;
  padding-left: 21px;
  background-color: #E6E6E6;
  color: #333;
  box-sizing: border-box;
  width: calc(100% - 53px);
  margin-right: -9px;
  transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
-webkit-transform: scale(-1, 1);
-o-transform: scale(-1, 1);
-ms-transform: scale(-1, 1);
}

.chat-respond.msg strong {
  color: #F48806;
}

.chat-respond {
  display: inline-block;
  vertical-align: top;
}

.flippd {
  width: 100%;
  transform: scale(-1, 1);
  -moz-transform: scale(-1, 1);
-webkit-transform: scale(-1, 1);
-o-transform: scale(-1, 1);
-ms-transform: scale(-1, 1);
}


@keyframes fadein {
    from {
        opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    }
    to {
       opacity: 1;
    -webkit-transform: none;
    transform: none;
    }
}
@-moz-keyframes fadein { /* Firefox */
    from {
       opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    }
    to {
         opacity: 1;
    -webkit-transform: none;
    transform: none;
    }
}
@-webkit-keyframes fadein { /* Safari and Chrome */
    from {
       opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    }
    to {
       opacity: 1;
    -webkit-transform: none;
    transform: none;
    }
}
@-o-keyframes fadein { /* Opera */
    from {
       opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0);
    }
    to {
         opacity: 1;
    -webkit-transform: none;
    transform: none;
    }
}
/* @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap");

* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: open sans;
  transition: ease 0.5s;
  text-decoration: none;
  list-style-type: none;
  font-size: 12px;
  font-weight: 300;
}

body {
  background: #2f2d3f;
  color: white !important;
}

.container {
  width: 100%;
  background: #282639;
  color: white !important;
  margin: 0 auto;
  margin-top: 50px;
  border-radius: 10px;
  position: relative;
  box-shadow: #292739 0 10px 20px;
}

.header {
  background: #ff6969;
  display: flex;
  padding: 15px;
  border-radius: 10px 10px 0 0;
}
.grp-img {
  position: relative;
  width: 125px;
  height: 45px;
}
.grp-img img {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  object-fit: cover;
  border: solid 2px white;
  position: absolute;
  top: 0;
  left: 0;
}
.grp-img .i1 {
  z-index: 1;
}
.grp-img .i2 {
  left: 40px;
}
.grp-img .i3 {
  left: 80px;
}
.grp-info {
  padding: 0 15px;
}
.grp-name {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 3px;
}
.grp-status {
  letter-spacing: 1px;
}

.chatbox {
  padding: 40px 20px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}
.chatbox .chat {
  display: flex;
  gap: 15px;
}
.chatbox img {
  width: 45px;
  height: 45px;
  border-radius: 50%;
  object-fit: cover;
  border: solid 2px white;
}
.chatbox .msg {
  background: #3a384c;
  max-width: 80%;
  padding: 20px;
  border-radius: 10px;
  position: relative;
  font-size: 13px;
}
.msg ion-icon {
  font-size: 20px;
  color: #3a384c;
  position: absolute;
  top: 10px;
}
.chatbox .chat:nth-child(even) {
  flex-direction: row-reverse;
}
.chatbox .chat:nth-child(odd) ion-icon {
  left: -14px;
}
.chatbox .chat:nth-child(even) ion-icon {
  right: -14px;
  transform: rotate(180deg);
}

.policy {
  background: #3a384c;
  padding: 25px;
  border-radius: 0 0 10px 10px;
}
.policy p {
  font-size: 13px;
}
.policy p a {
  font-size: 13px;
  color: #ff6969;
  text-decoration: underline;
}
.agree {
  display: inline-block;
  color: #ff6969;
  border: solid 2px #ff6969;
  border-radius: 50px;
  padding: 10px 30px;
  font-size: 16px;
  font-weight: 500;
  margin-top: 20px;
}
.agree:hover {
  color: white;
  background: #ff6969;
}

.close {
  display: inline-block;
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: #ff6969;
  color: white;
  display: flex;
  align-items: center;
  justify-content: center;
  position: absolute;
  bottom: -80px;
  right: 0;
}
.close:hover {
  box-shadow: #292739 0 0 10px 10px;
}
.close:hover ion-icon {
  transform: rotate(360deg);
}
.close ion-icon {
  font-size: 40px;
} */


</style>
