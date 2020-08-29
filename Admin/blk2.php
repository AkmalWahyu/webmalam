<style>*{box-sizing:border-box}
body {
  margin: 0;
  background: #1C1A30;
  height: 100vh;
  display: -webkit-flex;
  display: flex;
  -webkit-align-items: center; 
  align-items: center;
}
.container {
  width: 600px;
  height: 340px;
  margin: 0 auto; 
  position: relative;
  -webkit-perspective: 1000;
	-moz-perspective: 1000;
	perspective: 1000;
  -moz-transform: perspective(1400px);
	-ms-transform: perspective(1400px);
	-webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d; 
  transform-style: preserve-3d;
  -webkit-perspective-origin: right;
  -moz-perspective-origin: right;
  perspective-origin: right;
}
.card {
  width: 600px;
  height: 340px;
  box-shadow: 0 27px 55px 0 rgba(0, 0, 0, .7), 0 17px 17px 0 rgba(0, 0, 0, .5);
  position: relative; 
  -webkit-transform: rotate(0deg);
  -moz-transform: rotate(0deg);
  -ms-transform: rotate(0deg);
  transform: rotate(0deg);
  -webkit-transform-origin: 100% 0%;
  -moz-transform-origin: 100% 0%;
  -ms-transform-origin: 100% 0%;
  transform-origin: 100% 0%;
  -webkit-transform-style: preserve-3d;
  -moz-transform-style: preserve-3d; 
  transform-style: preserve-3d;
  transition: .8s ease-in-out;
}
.logo {
  width: 200px;
  height: 200px;
  position: relative;
  background:
  linear-gradient(45deg, #F5AF69 50%, #F4EED7 50.9%),
  linear-gradient(90deg, #FC5135 50%, #4E203C 50%),
  linear-gradient(-45deg, #F5AF69 50%, #E8D9A0 50.9%), 
  linear-gradient(#FC5135 50%, #4E203C 50%),
  linear-gradient(-45deg, #F5AF69 50%, #E8D9A0 50.9%),
  linear-gradient(90deg, #FC5135 50%, #4E203C 50%),
  linear-gradient(45deg, #FC5135 50%, #F5AF69 50.9%);
  background-size: 50px 50px, 100px 50px, 50px 50px, 200px 100px, 50px 50px, 100px 50px, 50px 50px;
  background-repeat: no-repeat;
  background-position: 0 0, 50px 0px, 150px 0, 0 50px, 0 150px, 50px 150px, 150px 150px;
}
.logo:before {
  content: "";
  position: absolute;
  top: 30px;
  left: 30px;
  width: 140px;
  height: 140px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  background: linear-gradient(45deg, #F4EED7 50%, #E8D9A0 50%);
}
.logo:after {
  content: "";
  position: absolute;
  top: 55px;
  left: 55px;
  width: 90px;
  height: 90px;
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
  background: linear-gradient(45deg, #FC5135 50%, #4E203C 49.9%),
  linear-gradient(-45deg, #F5AF69 50%, transparent 50%),
  linear-gradient(#FC5135 50%, #FC5135 50%),
  linear-gradient(-45deg, #4E203C 50%, transparent 50%);
  background-size: 45px 45px;
  background-repeat: no-repeat;
  background-position: 0 0, 0 45px, 45px 45px, 45px 0;
  border-radius: 0 50% 50% 50%;
}
.logo span {
  display: block;
  background: #4E203C;
  width: 29px;
  height: 32px;
  position: absolute;
  top: 99.5px;
  left: 130px;
  border-radius: 0 50% 50% 0;
}
.logo span:before {
  content: "";
  width: 10px;
  height: 10px;
  background: #E8D9A0;
  border-radius: 50%;
  position: absolute;
  top: 11px;
  left: 10px;
  z-index: 2;
}
.front, .back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: white;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  backface-visibility: hidden;
}
.front {
  display:-webkit-flex;
  display: flex;
  -webkit-justify-content: center;
  justify-content: center;
  -webkit-align-items: center;
  align-items: center;
  z-index: 2;
  -webkit-transform: rotateY(0deg);
  -moz-transform: rotateY(0deg);
  -ms-transform: rotateY(0deg);
  transform: rotateY(0deg);
}
.back {
  -webkit-transform: rotateY(-180deg);
  -moz-transform: rotateY(-180deg);
  -ms-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  font-family: 'Arimo', sans-serif;
}
.container:hover .card {
  -webkit-transform: rotateY(180deg) translateX(100%);
  -moz-transform: rotateY(180deg) translateX(100%);
  -ms-transform: rotateY(180deg) translateX(100%);
  transform: rotateY(180deg) translateX(100%);
  cursor: pointer;
}
ul {
  margin: 0;
  width: 100%;
  list-style: none;
  position: absolute;
  bottom: 30px;
  left: 0;
  padding: 0 1%;
}
ul:after {
  content: '';
  display: table;
  clear: both;
}
li {
  width: 31.3333333333%;
  margin: 0 1%;
  float: left;
  padding: 10px;
  border: 2px solid #FC5135;
  border-radius: 4px;
  position: relative;
  text-align: center;
  color: #4E203C;
}
li:before {
  position: absolute;
  top: -25px;
  left: 50%;
  margin-left: -15px;
  width: 30px;
  height:30px;
  background: #FC5135;
  color: white;
  line-height: 30px;
  text-align: center;
  border-radius: 50%;
  font-family: FontAwesome;
}
li:nth-child(1):before {content: "\f095"}
li:nth-child(2):before {content: "\f003"}
li:nth-child(3):before {content: "\f0c1"}
h1 {
  color: #FC5135;
  text-transform: uppercase;
  font-weight: 400;
  line-height: 1;
  margin-top: 110px;
  text-align: center;
  font-size: 40px;
}
h1 span {
  color: #4E203C;
  display: block;
  font-size: .45em;
  letter-spacing: 3px;
}
h1 i {
  font-style: normal;
  text-transform: none;
  font-family: 'Playfair Display', serif;
}</style>
<div class="container">
  <div class="card">
    <div class="front">
      <div class="logo"><span></span></div>
    </div>
    <div class="back">
      <h1>Akmal Wahyu<span>design <i>&</i> Web Programmer</span></h1>
      <ul>
        <li>+1-111-111-11-11</li>
        <li>my-email@email.com</li>
        <li>my-site.com</li>
        </ul>
    </div>
    </div>
  </div>
