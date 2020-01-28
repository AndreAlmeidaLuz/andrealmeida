#include <stdio.h>
#include <stdlib.h>
				
										
	typedef struct no{
	int num;
	struct no *prox;
						   	
	}No;
					   
	
	void criar(No *Lista){
	    Lista->prox = NULL;
	   }
	   		   	   	   
	void insere_lista_ordenada(No* Lista, int numero){	     
	No *novo_no; //criando um ponteiro 
    novo_no = malloc(sizeof(No));  //alocando espaço na memória
    novo_no->num = numero;
    novo_no->prox = NULL;
	   	   
	 if(Lista->prox == NULL){ //inserir quando a lista estiver vazia
	    Lista->prox = novo_no;
	    novo_no->prox = novo_no;
	        
	}
	else{
	    if(numero < Lista->prox->num){ // inserir no inicio
	        No *aux2 = Lista->prox;
	        
	        do{
	        	if (aux2->prox->num == Lista->prox->num){
	        		aux2->prox = novo_no;
                    novo_no->prox = Lista->prox;
                    Lista->prox = novo_no;	        			        		
				}
				aux2 = aux2->prox;	        	
			} while(aux2 != Lista->prox);
	    }
	    
	    else{
	    	No *aux = Lista->prox;
	    	
	    	do{
	    		if (numero > aux->num && aux->prox->num == Lista->prox->num){
	    			novo_no->prox = Lista->prox;
                    aux->prox = novo_no;	    			
				}
				else if(numero > aux->num && numero < aux->prox->num){
					novo_no->prox = aux->prox;
                    aux->prox = novo_no;				
				}
				else{
					aux = aux->prox;
				}
			}while(aux != Lista->prox);
	    	
		}    
	        	      	    
	}
}
					   							
			void imprime_lista(No* Lista){
				No *aux = Lista->prox;
			    if(aux == NULL)
			    printf("Lista vazia");
			    
			    else{
			    	do{
			        printf("\n%i", aux->num);
			      
			         aux= aux->prox;
			    }   
				while(aux != Lista->prox);
				}
			    
			}
			
			void removendo(No* Lista, int numero){  ////////// CRIEI ESSE OUTRO REMOVER SO PRA TESTAR!   
    if(Lista == NULL)//lista vazia
        printf("Lista vazia");         
         if(Lista->prox == Lista->prox){				 			        
			       Lista->prox = NULL;			       			
			 }
      
       No *aux = Lista;
				
			
   do{
   
    No *atual = Lista->prox;
    while(atual->prox != Lista->prox)//procura o último
        atual = atual->prox;

    No *no = Lista->prox;
    atual->prox = no->prox;
    Lista->prox = no->prox;
    

} while(aux->num == numero);
}
										
			void remover(No* Lista, int numero){
				if(Lista->prox ==NULL)				
				    printf("Lista Vazia!");
			     
			   
			        No *aux = Lista;
				
							
				if(aux->num==numero){
					
				No *atual = Lista->prox;
                while(atual->prox != Lista->prox)//procura o último
                atual = atual->prox;

                 No *no = Lista->prox;
                 atual->prox = no->prox;
                  Lista->prox = no->prox;
					
			
			
		}
				No *ant = aux;
				 aux = aux->prox;
				 
			    while(aux !=Lista && aux->num !=numero){
				 	ant = aux;
				 	aux = aux->prox; 
				 	
				}
				 
				if(aux == Lista)
				printf("Valor não encontrado");				  
				ant->prox = aux->prox;
			 
				
			}
	
			int pesquisar(No* Lista, int numero){
				if(Lista->prox == NULL)
				printf("Lista Vazia!");
				
				No *aux = Lista->prox;
				
				while(aux->prox !=Lista->prox && aux->num !=numero)
				aux = aux->prox;
				  
				if(aux->num != numero)
				  	printf("Valor não encontrado na lista.");
				  
				else{
				  	printf("Valor encontrado!");
				  }
				
				
			}
			
		
				
				int main(){
				
				No *Lista;
    			Lista = malloc(sizeof(No));
    			
    			criar(Lista);

								                  				                 				                  			                  
				insere_lista_ordenada(Lista,1);	
				insere_lista_ordenada(Lista,5);
			    insere_lista_ordenada(Lista,2);
			    insere_lista_ordenada(Lista,43);
				insere_lista_ordenada(Lista,1);
			    insere_lista_ordenada(Lista,19);
			    insere_lista_ordenada(Lista,4);
				insere_lista_ordenada(Lista,29);
			    insere_lista_ordenada(Lista,6);
			    
			    remover(Lista,4);
				
				pesquisar(Lista, 19);		   				   	    
				imprime_lista(Lista);
				
				
				
				return 0;
				}
