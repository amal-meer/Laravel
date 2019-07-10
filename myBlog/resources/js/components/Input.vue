<template>
    <div class="form-group row">
        <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title') }}</label>

        <div class="col-md-6">
            <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autocomplete="title">

        </div>
    </div>
</template>

<script>
    export default {
        name: "Input"
    }
</script>

<style scoped>

</style>