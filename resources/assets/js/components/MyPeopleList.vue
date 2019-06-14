<template>
  <div class="container">
    <div class="content">

    <div class="title">All People List </div>
	
	<ul>
	<li v-for="(item, index) in todosList" >
	<a  v-bind:href="'/pl/'+ (item.url.split('/'))[5] ">
		{{ item.name }}
	</a>
	</li>
	</ul>

    </div>
  </div>	
</template>


<script>  
import axios from "axios";

export default {  
  data() {
    return { todosList: [] };
  },
  mounted() {
    axios.get("http://localhost:8000/plData").then(response => { 
		this.todosList = response.data
	})
  }
};
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
