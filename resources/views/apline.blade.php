@include('layouts/app2')


<div class="m-12" x-data="{
    value:'bind goes here',
    people:['sky stars','old geeks','sasi'],
    addperson(){
        this.people.push(this.value);
        this.value='';
    }
}">
   <form @submit.prevent="addperson">
     <input type="text" x-model="value"  name="username">
   </form>
   <input type="text">
   {{-- now to loop over all the users that we have --}}
<ul>
    <template x-for="person in people">
      <li x-text ="person"></li>
    </template>
</ul>
</div>


<script src="js/index.js"></script>














 