function SelectCat2(){
    removeAllOptions(document.form1.SubCat);
    addOption(document.form1.SubCat, "", "Pilih Layanan", "");
    if(document.form1.Category.value == 'Laundry Kiloan')
    {   addOption(document.form1.SubCat,"Cuci Setrika 10kg Rp 30.000", "Cuci Setrika 10kg Rp 30.000");
        addOption(document.form1.SubCat,"Cuci Setrika 30kg Rp 80.000", "Cuci Setrika 30kg Rp 80.000");
        addOption(document.form1.SubCat,"Setrika 10kg Rp 20.000", "Setrika 10kg Rp 20.000");
        addOption(document.form1.SubCat,"Setrika 30kg Rp 50.000", "Setrika 30kg Rp 50.000");
    }
    if(document.form1.Category.value == 'Laundry Sepatu')
    {   addOption(document.form1.SubCat,"Sepatu Leather Rp 75.000", "Sepatu Leather Rp 75.000");
        addOption(document.form1.SubCat,"Sepatu Kanvas Rp 60.000", "Sepatu Kanvas Rp 60.000");
        addOption(document.form1.SubCat,"Sepatu Sneaker Rp 55.000", "Sepatu Sneaker Rp 55.000");
        addOption(document.form1.SubCat,"Sepatu Boots Rp 35.000", "Sepatu Boots Rp 35.000");
        addOption(document.form1.SubCat,"Sepatu Slip On Rp 20.000", "Sepatu Slip On Rp 20.000");
    }
    if(document.form1.Category.value == 'Laundry Satuan')
    {   addOption(document.form1.SubCat,"Bantal Rp 9.000", "Bantal Rp 9.000");
        addOption(document.form1.SubCat,"Guling Rp 9.000", "Guling Rp 9.000");
        addOption(document.form1.SubCat,"Celana Rp 6.000", "Celana Rp 6.000");
        addOption(document.form1.SubCat,"Kemeja Rp 7.000", "Kemeja Rp 7.000");
        addOption(document.form1.SubCat,"Jaket Rp 8.000", "Jaket Rp 8.000");
        addOption(document.form1.SubCat,"Selimut Rp 20.000", "Selimut Rp 20.000");
        addOption(document.form1.SubCat,"Jas Rp 40.000", "Jas Rp 40.000");
        addOption(document.form1.SubCat,"Bed Cover Rp 30.000", "Bed Cover Rp 30.000");
    }
    if(document.form1.Category.value == 'Laundry Karpet')
    {   addOption(document.form1.SubCat,"Karpet Rumah/Meter^2 Rp 22.000", "Karpet Rumah/Meter^2 Rp 22.000");
        addOption(document.form1.SubCat,"Karpet Masjid/Meter^2 Rp 12.000", "Karpet Masjid/Meter^2 Rp 12.000");
        addOption(document.form1.SubCat,"Karpet Kantor Tanam/Meter^2 Rp 30.000", "Karpet Kantor Tanam/Meter^2 Rp 30.000");
    }
}
function removeAllOptions(selectbox)
{   var i;
    for(i=selectbox.options.length-1;i>=0;i--)
    {   selectbox.remove(i); }
}
function addOption(selectbox, value, text )
{   var optn = document.createElement("OPTION");
    optn.text = text;
    optn.value = value;
    selectbox.options.add(optn);
}   