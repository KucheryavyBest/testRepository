<template>
  <div class="container">
    <div class="content">
      <div class="title">Test Task From OnApp for Me</div>
      <div class="links">
        <a href="/pl">All Peaple List</a> <br></br><br></br>
        
		<a href="/pl/13">One People Page id=13</a>
		<a href="/pl/10">One People Page id=10</a>
		<a href="/pl/9">One People Page id=9</a>
		
		
		<br></br><br></br>
		
        <a href="/api/starships/">Get SharShip List in json</a>
		<a href="/api/vehicles/">Get Vehicles List in json</a>
		<a href="/api/planets/1">Get planets id = 1 </a>
		
      </div>
    </div>
  </div>
</template>

<script>
  export default{
    data () {
      return {
        msg: 'Vue - Laravel - Example',
        author: 'Jiajian Chan',
        email: 'changejian@gmail.com'
      }
    }
  }
</script>

<style>
  html, body {
    height: 100%;
  }

  body {
    margin: 0;
    padding: 0;
    width: 100%;
    display: table;
    font-weight: 100;
    font-family: 'Lato';
  }

  .container {
    text-align: center;
    display: table-cell;
    vertical-align: middle;
  }

  .content {
    text-align: center;
    display: inline-block;
  }

  .title {
    font-size: 96px;
  }

  .links > a {
    color: #636b6f;
    padding: 0 25px;
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1rem;
    text-decoration: none;
    text-transform: uppercase;
  }
</style>
