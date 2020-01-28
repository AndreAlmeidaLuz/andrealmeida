
package atividade;

public class PrincipalCasa {
    
    public static void main(String[]args){
        Casa c1 = new Casa();
       c1.cor= "Laranjado";
        System.out.println("Cor casa: "+c1.cor);
     
    c1.porta1.abre();
    c1.porta1.abre();
    c1.porta2.abre();   
        System.out.println("portas abertas: "+c1.quantasPortasEstaoAbertas());
    }
    
}
