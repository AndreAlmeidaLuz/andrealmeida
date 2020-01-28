
package atividade;

public class PrincipalPorta {
    
    public static void main(String []args){
        
       Porta porta = new Porta();           
         porta.fecha();
        porta.pinta("Amarelo");
        System.out.println("A porta está aberta? " +porta.estaAberta());
        System.out.println("cor da porta "+ porta.getCor());
        porta.setDimensaox(100);
        porta.setDimensaoy(90);
        porta.setDimensaoz(80);
        System.out.println("Dimensão X :"+porta.getDimensaox());
        System.out.println("Dimensão Y :"+ porta.dimensaoy);
        System.out.println("Dimensão Z :"+porta.dimensaoz);
    }
    
    
}
