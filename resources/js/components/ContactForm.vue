<template>
    <form @submit.prevent="submit">
        <div class="form-group">
            <input
                type="text"
                placeholder="Name"
                class="form-control"
                name="name"
                id="name"
                v-model="fields.name"
            />
        </div>

        <h1>City: {{ response.Name }}</h1>
        <h1>Daylight: {{ response.Daylight }}</h1>
        <h1>Sunrise: {{ response.Sunrise }}</h1>
        <h1>Sunset: {{ response.Sunset }}</h1>
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</template>

<script>
var csrf_token = $('meta[name="csrf-token"]').attr("content");
export default {
    data() {
        return {
            fields: {
                _token: csrf_token
            },
            errors: {},
            response: {}
        };
    },
    methods: {
        submit() {
            this.errors = {};
            axios
                .post("/submit", this.fields)
                .then(response => {
                    console.log(response);
                    this.response = response.data;
                })
                .catch(error => {
                    if (error.response.status === 422) {
                        this.errors = error.response.data.errors || {};
                    }
                });
        }
    }
};
</script>
