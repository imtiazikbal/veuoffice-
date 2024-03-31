<script setup>


const submit = () => {
    alert('ok')
}
</script>

<template>

    <div class="container py-10">
        <div class="row d-flex justify-content-center align-items-center">
    <form @submit.prevent="submit">
    <div class="col-md-3">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
        option</label>
    <select id="countries">
        <option selected>Choose a country</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
    </select>
</div>

<div class="col-md-3">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
        option</label>
        <select id="countries">
        <option selected>Choose a country</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
    </select>
</div>

<div class="col-md-3">
    <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select an
        option</label>
        <select id="countries">
        <option selected>Choose a country</option>
        <option value="US">United States</option>
        <option value="CA">Canada</option>
        <option value="FR">France</option>
        <option value="DE">Germany</option>
    </select>
</div>
<div class="col-md-3">
    
       
            <button class="btn btn-primary text-black" type="submit">Search</button>
 
</div>
</form>


</div>
    </div>













</template>