<template>
    <div class="container" style="margin-top:15px">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" v-text="header"></div>

                    <slot></slot>

                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {

        props: [
            'header',
        ]
    }
</script>
