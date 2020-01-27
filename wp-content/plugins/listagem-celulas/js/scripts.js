class Celula {

    constructor(numeroCelula, liderCelula, telefone, bairro, diaCelula, horaCelula){
        this._numeroCelula = numeroCelula;
        this._liderCelula = liderCelula;
        this._telefone = telefone;
        this._bairro = bairro;
        this._diaCelula = diaCelula;
        this._horaCelula = horaCelula;
    }


    get numeroCelula() {
        return this._numeroCelula;
    }

    get liderCelula() {
        return this._liderCelula;
    }

    get telefone() {
        return this._telefone;
    }

    get bairro() {
        return this._bairro;
    }

    get diaCelula() {
        return this._diaCelula;
    }

    get horaCelula() {
        return this._horaCelula;
    }
}


jQuery("#downloadBackupBtn").click(function () {
    jQuery.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        data: {
            action: "csv"
        },
        success: function(d) {
            window.location = d;
        }
    });
});

jQuery("#restoreBackupBtn").click(function () {
    jQuery.ajax({
        type: "POST",
        url: "/wp-admin/admin-ajax.php",
        data: {
            action: "csv"
        },
        success: function(d) {
            window.location = d;
        }
    });
});

jQuery( "#addBtn" ).click(function() {
    jQuery( "#addCelulaWrapper" ).slideToggle( "fast", function() {
        // Animation complete.
    });
});

jQuery(document).on('click', '.editBtn', function() {

        $celulaInfos = jQuery(this).parent().parent().find('.editData').map(function(){
            return jQuery.trim(jQuery(this).text());
        }).get();


        celula = new Celula(
            $celulaInfos[1],
            $celulaInfos[0],
            $celulaInfos[2],
            $celulaInfos[3],
            $celulaInfos[4],
            $celulaInfos[5]
        );

        $addForm = jQuery('#addCelulaWrapper').clone(),
        $editDiv = jQuery('<tr data-search="'+celula.numeroCelula+'" class="celulaTr"></tr>'),
        $iconDefault = jQuery(this).find('.icon-default').first(),
        $iconHover = jQuery(this).find('.icon-hover').first(),
        $deleteDefault = jQuery(this).parent().parent().find('.deleteBtn').first().find('.icon-default').first(),
        $deleteHover = jQuery(this).parent().parent().find('.deleteBtn').first().find('.icon-hover').first();

    //setar os campos com o texto antigo
    $coisa = $addForm.find('tr').first().next().children();

    $coisa.eq(0).children().first().val(celula.liderCelula);
    $coisa.eq(1).children().first().val(celula.numeroCelula);
    $coisa.eq(2).children().first().val(celula.telefone);
    $coisa.eq(3).children().first().val(celula.bairro);
    $coisa.eq(4).children().first().val(celula.diaCelula);
    $coisa.eq(5).children().first().val(celula.horaCelula);

    if(!$iconDefault.parent().hasClass("saveBtn")){

        //readapt the form style
        $addForm.find('#addCelulaForm').css({
            "padding":"30px",
            "background": "#fdfdfd",
            "margin-left": "0px",
            "margin-right": "0px",
            "box-shadow":"inset 0px 1px 7px #ddd"
        });

        //button animations
        //Edit to Save
        $iconDefault.css({
            'transform':'rotate(180deg) scale(.5)',
            'opacity':'0'
        });

        $iconHover.css({
            'transform':'rotate(0) scale(1)',
            'opacity':'1'
        });

        //Delete to Cancel
        $deleteDefault.css({
            'transform':'rotate(180deg) scale(.5)',
            'opacity':'0'
        });

        $deleteHover.css({
            'transform':'rotate(0) scale(1)',
            'opacity':'1',
            'color':'indianred'
        });

        //add class to change functionality of the buttons
        $deleteDefault.parent().addClass('cancelBtn');
        $iconDefault.parent().addClass('saveBtn');
        $deleteDefault.parent().toggleClass('deleteActive');

        $addForm.find('#insertType').attr("value","edit");
        $addForm.find('.btnWrapper span').text("Salvar Alterações");
        $editDiv.append('<td colspan="9" style="padding: 0;"></td>');
        $editDiv.children().first().append($addForm);
        jQuery(this).parent().parent().after($editDiv);
        $addForm.slideDown( "fast", function() {});

    }

});



jQuery(document).on('click','.cancelBtn',function(){
    var $tr = jQuery(this).parent().parent().next(),
        $iconDefault = jQuery(this).find('.icon-default').first(),
        $iconHover = jQuery(this).find('.icon-hover').first(),
        $saveDefault = jQuery(this).parent().parent().find('.saveBtn').first().find('.icon-default').first(),
        $saveHover = jQuery(this).parent().parent().find('.saveBtn').first().find('.icon-hover').first();

    $tr.find('#addCelulaWrapper').slideUp("fast", function (){
        $tr.remove();
    });

    //button animations
    //Edit to Save
    $iconHover.css({
        'transform':'rotate(180deg) scale(.5)',
        'opacity':'0'
    });

    $iconDefault.css({
        'transform':'rotate(0) scale(1)',
        'opacity':'1'
    });

    //Delete to Cancel
    $saveHover.css({
        'transform':'rotate(180deg) scale(.5)',
        'opacity':'0'
    });

    $saveDefault.css({
        'transform':'rotate(0) scale(1)',
        'opacity':'1',
    });

    //add class to change functionality of the buttons
    $saveDefault.parent().toggleClass("saveBtn");
    $iconDefault.parent().toggleClass('cancelBtn');
    $iconDefault.parent().toggleClass('deleteActive');


});

jQuery(document).on('click','.saveBtn',function () {
    saveChanges();
});

jQuery(document).on('click','.deleteActive',function () {
    if(confirm("Tem certeza que deseja deletar?")){
        deleteItem(this);
    }
});

function deleteItem(e){
    var $form = jQuery('<form action="" method="POST" style="display: none;">');
    $form.append('<input id="numeroCelula" name="numeroCelula" value="' + e.dataset.idCelula + '"/>');
    $form.append('<input id="insertType" name="insertType" value="delete" />');
    $form.appendTo(jQuery('body')).submit();
}


function saveChanges(e, form){

    // Don't actually submit the form:
    e.preventDefault();

    $originals = jQuery(form).parent().parent().find('span');

    $originals.each(function () {
        var val       = jQuery(form).find('input').val();

        // Use text() instead of html() to prevent unwanted effects.
        jQuery(this).text(val);

        jQuery(this).remove();
        jQuery(this).show();
    });

}

function searchCelula(){
    $query = jQuery('#searchbar').val();
    $celulas = jQuery(".celulaTr");
    if($query){
        $celulas.each(function () {
            jQuery(this).show();
            if($query != this.dataset.search){
                jQuery(this).hide();
            }
        });
    }else{
        $celulas.each(function () {
            jQuery(this).show();
        });
    }
}


jQuery(document).on('submit', '.edit-form', function(e){
    $form = jQuery('.edit-form');
    saveChanges(e, $form);
});

// jQuery(document).on('blur', '.editing', function(e){
//     $form = jQuery('.edit-form');
//     saveChanges(e, $form);
// });


