<style>
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    right: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    font-family: 'rubikregular', Arial, sans-serif;
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 22px;
    color: #818181;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

.divider {
    height: 1px;
    margin: 7px 50px 7px 33px;
    overflow: hidden;
    background-color: #818181;
    box-shadow: 1px 3px 10px #818181;
}

#innernav{
    width: 100%;
    height: 100%;
    overflow-y: scroll;
    padding-right: 17px;
    box-sizing: content-box;
}

</style>

<div id="icon-bar">
    <a href="#"><i class="fa fa-home"></i></a>
    <a href="#"><i class="fa fa-search"></i></a>
    <a href="#" onclick="openNav()"><i class="fa fa-navicon"></i></a> 
</div>

<div id="mySidenav" class="sidenav">
  <div id="innernav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Accueil</a>
      <li class="divider"></li>
      <a href="index.php">Types</a>
      <li class="divider"></li>
      <a href="#">Objets</a>
      <li class="divider"></li>
      <a href="#">Reproduction</a>
      <li class="divider"></li>
      <a href="#">Entraînement</a>
      <li class="divider"></li>
      <a href="#">Régions</a>
      <li class="divider"></li>
      </br></br></br></br>
    </div>
  </div>
</div>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>