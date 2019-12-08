<template>
  <div class="q-my-xl">
    <q-card>
      <q-card-title>Create new product</q-card-title>
      <q-card-main>
        <q-field :count="250">
          <q-input float-label="Nazov" v-model="productName" max-length="250" />
        </q-field>
        <q-field :count="50">
          <q-input float-label="Farba" v-model="productColor" max-length="50" />
        </q-field>

        <q-field :count="50">
          <q-input float-label="Slug" v-model="productSlug" max-length="50" />
        </q-field>

        <q-field :count="50">
          <q-input float-label="Velkost" v-model="productSize" max-length="50" />
        </q-field>

        <q-field><q-input
          float-label="Cena"
          v-model.number="productPrice"
          type="number"
          style="max-width: 200px"
          min="0"
        /></q-field>

        <q-field>
          <div>
            <!-- Single Selection as a simple List -->
            <q-select
              float-label="Kategoria"
              v-model="productCategory"
              :options="kategorie"
            />
          </div></q-field>

        <q-field>
          <div>
            <!-- Single Selection as a simple List -->
            <q-select
              float-label="Subkategoria"
              v-model="productSubcategory"
              :options="subkategorie"
            />
          </div></q-field>

        <q-field :count="5000">
          <q-input
            type="textarea"
            float-label="Description"
            v-model="productDescription"
            :max-height="100"
            rows="7"
          />
        </q-field>

        <q-field helper="Supported format: JPG, max. file size: 300KiB" class="q-mt-lg">
          <q-uploader float-label="Images" multiple extensions=".jpg" auto-expand/>
          <q-input type="file" @change="onFileSelected"></q-input>
        </q-field>
      </q-card-main>
      <q-card-actions class="q-mt-md">
        <div class="row justify-end full-width docs-btn">
          <q-btn label="Cancel" flat to="/products/index"/>
          <q-btn label="Create" color="primary" @click="createProduct"/>
        </div>
      </q-card-actions>
    </q-card>
  </div>
</template>

<style lang="stylus">
  .docs-btn .q-btn{
    padding: 15px 20px
  }
</style>
<script>
    import axios from 'axios'

    export default {
        data () {
            return {
                kategorie: [
                    {
                        label: 'Muzi',
                        value: 0
                    },
                    {
                        label: 'Zeny',
                        value: 1
                    },
                    {
                        label: 'Deti',
                        value: 2
                    },
                    {
                        label: 'Ostatne',
                        value: 3
                    }
                ],
                subkategorie:[{label:'Kosela',value:0},{label:'Kratke gate',value:1},{label:'Siltovka',value:2},{label:'Bunda',value:3},{label:'Kabat',value:4}],
                productName: '',
                productSlug:'',
                productColor:'',
                productSize:'',
                productPrice:'',
                productCategory:'',
                productSubcategory:'',
                productDescription: '',
                selectedFile: null,
            }
        },
        methods: {
            createProduct () {
                axios
                    .post('http://127.0.0.1:8000/products', this.productData)
                    .then(response => {
                        this.$q.notify({type: 'positive', timeout: 2000, message: 'The product has been created.'})
                        this.$router.push({path: '/products/' + response.data.id + '/edit'})
                    })
                    .catch(error => {
                        this.$q.notify({type: 'negative', timeout: 2000, message: 'An error has been occured.'})
                        console.log(error)
                    })
                    const fd = new FormData();
                    fd.append('image',this.selectedFile,this.selectedFile.name)
                    .post('C://Laravel//public//images',fd)
                    .then(response=>{
                        console.log(response)
                    })
            },
            onFileSelected(event){
                this.selectedFile = event.target.files[0]
            }
        },
        computed: {
            productData: function () {
                return { name: this.productName, slug: this.productSlug, color: this.productColor, price: this.productPrice, size: this.productSize, category:this.productCategory,
                    subcategory: this.productSubcategory, description: this.productDescription }
            }
        }
    }
</script>

