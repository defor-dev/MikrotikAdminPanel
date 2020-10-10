var vm = new Vue ({
    el: '#search',
    data: {
        status: 'hide',
        txt: '',
    },
    watch: {
        txt: function () {
            this.status = this.txt.length > 0 ? 'admin__input-button' : 'hide'
        },
    },
});

var cr = new Vue ({
    el: '#create',
    data: {
      status: 'no-clickable',
      field_1: '',
      field_2: '',
      field_3: '',
      field_4: '',
      field_5: '',
        field_1_isContent: false,
        field_2_isContent: false,
        field_3_isContent: false,
        field_4_isContent: false,
        field_5_isContent: false,
    },
    watch: {
        field_1: function () {
            this.field_1_isContent = this.field_1.length > 0
            this.clickable()
        },
        field_2: function () {
            this.field_2_isContent = this.field_2.length > 0
            this.clickable()
        },
        field_3: function () {
            this.field_3_isContent = this.field_3.length > 0
            this.clickable()
        },
        field_4: function () {
            this.field_4_isContent = this.field_4.length > 0
            this.clickable()
        },
        field_5: function () {
            this.field_5_isContent = this.field_5.length > 0
            this.clickable()
        },
    },
    methods: {
        clickable: function () {
            if (this.field_1_isContent &&
                this.field_2_isContent &&
                this.field_3_isContent &&
                this.field_4_isContent &&
                this.field_5_isContent) {
                this.status = 'clickable'
            } else {
                this.status = 'no-clickable'
            }
        },
    },
});