
package atividade;


public class Casa {
    String cor;
    Porta porta1 = new Porta();
    Porta porta2 = new Porta();
    Porta porta3 = new Porta();
    int abertas = 0;
    public void pinta(String s){
        this.cor = s;
        
    }
    public int quantasPortasEstaoAbertas(){
        
       if(this.porta1.estaAberta()){
           this.abertas += 1;
       }
       if(this.porta2.estaAberta()){
           this.abertas+= 1;
       }
       if(this.porta3.estaAberta()){
           this.abertas+= 1;
       }
        return this.abertas;        
    }
}
