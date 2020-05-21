const tekstury = {

    all : document.querySelector('.all'),
    item : document.querySelectorAll('.item'),
    tyt : document.querySelector('.tyt'),
    ps : document.querySelectorAll('.ps'),
    c1 : document.querySelector('.c1'),
    c2 : document.querySelector('.c2'),
    id1 : document.querySelector('.id1'),
    id2 : document.querySelector('.id2'),
    idd : document.querySelectorAll('.idd'),
    kon : document.querySelector('.kon'),
    baz : document.querySelector('.baz'),
    ib : document.querySelector('.ib'),
    ic : document.querySelector('.ic'),
    id : document.querySelector('.id'),



    kontrast : function() {
        this.all.classList.add("konall"); //yup

        for(var i=0; i<this.item.length; i++){
            this.item[i].classList.add("konitem");
        };

        this.tyt.classList.add("kontyt");

        for(var i=0; i<this.ps.length; i++){
            this.ps[i].classList.add("konps");
        };

        this.c1.classList.add("konc1");

        this.ib.classList.add("konib");
        
        this.ic.classList.add("konic");

        this.c2.classList.add("konc2");

        this.id.classList.add("konid");

        this.id1.classList.add("konid1");

        this.id2.classList.add("konid2");

        for(var i=0; i<this.idd.length; i++){
            this.idd[i].classList.add("konidd");
        };
    },
    

    
    bazowy : function() {
        this.all.classList.remove("koall");

        for(var i=0; i<this.item.length; i++){
            this.item[i].classList.remove("konitem");
        };

        this.tyt.classList.remove("kontyt");

        for(var i=0; i<this.ps.length; i++){
            this.ps[i].classList.remove("konps");
        };

        this.c1.classList.remove("konc1");

        this.ib.classList.remove("konib");

        this.ic.classList.remove("konic");

        this.c2.classList.remove("konc2");

        this.id.classList.remove("konid");

        this.id1.classList.remove("konid1");

        this.id2.classList.remove("konid2");

        for(var i=0; i<this.idd.length; i++){
            this.idd[i].classList.remove("konidd");
        };
    },

    init : function(){
        this.kon.addEventListener('click', this.kontrast.bind(this));
        this.baz.addEventListener('click', this.bazowy.bind(this));
    }
    
}

tekstury.init();