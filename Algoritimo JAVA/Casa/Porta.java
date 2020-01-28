
package atividade;

public class Porta {
   boolean aberta;
    String cor;
    int dimensaox;
     int dimensaoy;
    int dimensaoz;
    
    public void abre(){
          this.aberta = true;
      }
    
    public void fecha(){
        this.aberta = false;
    }
    public void pinta(String s){
      this.cor = s;
    }

    public boolean estaAberta() {
     return this.aberta;
    }

    public void setAberta(boolean aberta) {
        this.aberta = aberta;
    }

    public String getCor() {
        return cor;
    }

    public void setCor(String cor) {
        this.cor = cor;
    }

    public int getDimensaox() {
        return dimensaox;
    }

    public void setDimensaox(int dimensaox) {
        this.dimensaox = dimensaox;
    }

    public int getDimensaoy() {
        return dimensaoy;
    }

    public void setDimensaoy(int dimensaoy) {
        this.dimensaoy = dimensaoy;
    }

    public int getDimensaoz() {
        return dimensaoz;
    }

    public void setDimensaoz(int dimensaoz) {
        this.dimensaoz = dimensaoz;
    }
  
    
  
    
}

