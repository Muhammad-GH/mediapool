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

        <li v-for="(res, index) in response" :key="index">
            <h3>City: {{ res.Name }}</h3>
            <h3>Daylight: {{ res.Daylight }}</h3>
            <h3>Sunrise: {{ res.Sunrise }}</h3>
            <h3>Sunset: {{ res.Sunset }}</h3>
        </li>

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
            response: []
        };
    },
    methods: {
        submit() {
            this.errors = {};
            axios
                .post("/submit", this.fields)
                .then(response => {
                    var obj = {};
                    $.each(response.data, function(key, value) {
                        obj[key] = value;
                    });
                    this.response.push(obj);
                    console.log(this.response);
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
