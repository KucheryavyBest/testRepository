<template>
  <div class="container">
    <div class="content">
	
	<a href="http://localhost:8000/pl"> All Peaple List </a>
	
	
	<div class="row">
		<div><i> name: </i> <b> {{ todosList.name }}</b>		</div>
		<div><i> mass: </i> <b> {{ todosList.mass }}</b>		</div>
		<div><i> hair_color: </i> <b> {{ todosList.hair_color }}</b>		</div>
		<div><i> skin_color: </i> <b> {{ todosList.skin_color }}</b>		</div>
		<div><i> eye_color: </i> <b> {{ todosList.eye_color }}</b>		</div>
		<div><i> birth_year: </i> <b> {{ todosList.birth_year }}</b>		</div>
		<div><i> gender: </i> <b> {{ todosList.gender }}</b>		</div>
		<div><i> created: </i> <b> {{ todosList.created }}</b>		</div>
		<div><i> edited: </i> <b> {{ todosList.edited }}</b>		</div>
		<div><i> url: </i> <b> {{ todosList.url }}</b>		</div>

	</div>

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
  
    axios.get("http://localhost:8000/plData/" + this.$route.params.id).then(response => { 
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


  div.row div 
  {
	 width: 100%;
  }
 

   div.row div  i {float:left; width: 20%;text-align: left;}
   div.row div  b {float:right; width: 80%;text-align: right;}




</style>
