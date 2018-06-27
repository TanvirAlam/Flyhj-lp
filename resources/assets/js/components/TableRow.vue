<template>
<div>
   <tr v-for="(option, index) in optionData" :key="option.id">
        <td v-text="option.id"></td>
        <td>
            <div v-if="editing && editId == option.id">
                <input type="text" v-model="key">
            </div>
            <div v-else v-html="option.key">
                {{option.key}}
            </div>
        </td>
        <td>
            <div v-if="editing && editId == option.id">
                <input type="text" v-model="value">
            </div>
            <div v-else v-html="option.value">
                {{option.value}}
            </div>
        </td>
        <td>
            <div v-if="editing && editId == option.id">
                <button class="button is-small" @click="updateOption()">
                    <span class="icon is-small">
                        <i class="fas fa-save"></i>
                    </span>
                </button>
                <button class="button is-small" @click="editing = false">
                    <span class="icon is-small">
                        <i class="fas fa-ban"></i>
                    </span>
                </button>
            </div>
            <div v-else>
                <button class="button is-small" @click="editOption(index, option.id)">
                    <span class="icon is-small">
                        <i class="fas fa-pencil-alt"></i>
                    </span>
                </button>
                <button class="button is-small" @click="deleteOption(index, option.id)">
                    <span class="icon is-small">
                        <i class="fas fa-trash-alt"></i>
                    </span>
                </button>
            </div>
        </td>
    </tr>
</div>
</template>

<script>
    export default {
        data() {
            return {
                optionData: [],
                editing: false,
                key: 0,
                value: '',
                editId: ''
            };
        },

        created() {
            this.fetchOptions();
        },

        methods: {
            fetchOptions() {
                axios
                    .get("/api/options")
                    .then(response => {
                        this.optionData = response.data
                    });
            },

            deleteOption(index, id) {
                axios
                    .delete("/api/options/" + id)
                    .catch(error => {
                        console.log(error.response.data)
                    })
                    .then(response => {
                        this.optionData.splice(index, 1)
                    });       
            },

            editOption(index, id) {
                this.editing = true
                this.editId = id
            },

            updateOption() {
                axios
                    .patch("/api/options/" + this.editId, {
                        key: this.key,
                        value: this.value
                    })
                    .catch(error => {
                        console.log(error.response.data, "danger");
                    });

                this.editing = false;
                window.location.reload(true);
            }
        }
    }
</script>
