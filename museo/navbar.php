<style>
  nav {
    width: 100%;
    background: #ecf0f3;
    box-shadow: -3px -3px 7px #ffffff,
      3px 3px 5px #ceced1,
      inset -3px -3px 7px #ffffff,
      inset 3px 3px 5px #ceced1;
    position: fixed;
    top: 0px;
    left: 0px;
  }
  nav .menu {
    max-width: 1270px;
    margin: auto;
    padding: 0 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .menu .logo a {
    font-size: 28px;
    font-weight: 600;
    text-decoration: none;
    color: #31344b;
  }
  .menu ul {
    list-style: none;
    display: flex;
  }
  .menu ul a {
    margin: 0 8px;
    text-decoration: none;
    font-size: 18px;
    color: #31344b;
    font-weight: 400;
    display: inline-flex;
    padding: 10px 12px;
    box-shadow: -3px -3px 7px #ffffff,
      3px 3px 5px #ceced1;
    position: relative;
    transition: all 0.3s ease;
  }
  .menu ul a:hover {
    color: #3498db;
  }
  nav label.btn {
    color: #31344b;
    font-size: 18px;
    cursor: pointer;
    display: none;
  }
</style>

<nav>
  <div class="menu">
    <div class="logo"><a href="index.php">TA<span style="color:lightseagreen">TE</span></a></div>
    <ul>
      <label class="btn cancel" for="check"><i class="fas fa-times"></i></label>
      <li><a href="index.php">Home Page</a></li>
      <li><a href="artist_room_index.php">Artist Room</a></li>
      <li><a href="collezione_arte_index.php">Collezione Arte</a></li>
      <li><a href="statistiche_index.php">Statistiche</a></li>
      <li><a href="Informazioni.php">Informazioni</a></li>
    </ul>
    <label for="check" class="btn bars"><i class="fas fa-bars"></i></label>
  </div>
  </div>
</nav>