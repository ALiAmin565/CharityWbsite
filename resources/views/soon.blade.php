<!DOCTYPE html>
<html>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">
<style>
body, html {
  height: 100%;
  margin: 0;
}

.bgimg {
  background-image: url('./images/forestbridge.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 10px;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  width: 75%;
}

hr {
  margin: auto;
  width: 40%;
}
.soon{
    font-size: 10rem;
    color: black;
    font-weight: bolder;
}
</style>
<body>

<div class="bgimg">
  <div class="topleft">
    <a class="navbar-brand" href="/">
        <img src="./logo.png" class="logo img-fluid" alt="  جمعية البرالخيرية بظهران الجنوب " style="width: 12rem;">
    </a>
  </div>
  <div class="middle mt-10">
    <p class="soon">Comming Soon</p>
    <a class="btn btn-danger " href="{{ url('/' . $page='payment') }}">Back to Home</a>
  </div>
</div>

</body>
</html>
