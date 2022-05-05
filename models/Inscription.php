<?php
class Inscription {
    //attrubuts d'instance
    //attrubuts de class
    //attrubuts navigationnels => attrubut issus des relations(associations)
    /*
     * ManyToOne
    */
    public  function ac():AC
    {
        //return null;
        return new AC;
    }
    public  function anneescolaire():AnneeScollaire
    {
        //return null;
        return new AnneeScollaire();
    }

}