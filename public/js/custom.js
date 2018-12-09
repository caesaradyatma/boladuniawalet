var app = new Vue ({
    el: '#app',
    data: {
        products: products,
        product_name: "",
        product_image1: "",
        product_image2:"",
        product_image3:"",
        product_desc: "",
    },
    methods: {
        showModal: function (event) {
            var button = event.currentTarget
            var id = button.getAttribute('data-id')
            var name = button.getAttribute('data-name')
            this.product_image1 = "/img/Product/"+products[id - 1].images_id+"-min.jpg";
            this.product_image2 = "/img/Product/" + products[id - 1].images_id + "_2sides-min.jpg";
            this.product_image3 = "/img/Product/" + products[id - 1].images_id + "_3sides-min.jpg";
            this.product_name = name
            this.product_desc = products[id - 1].description
        },

    }
})