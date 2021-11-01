#include <cstdlib>
#include <iostream>
#include <conio.h>

using namespace std;

class array{
      private:
              char data[20][20], e[200];
              
    int a = 3; 
    int b = 3;
    int c;
      public:
             void awal();
             void proses();
             void hasil();
};

void array::awal(){
     cout<<"masukan baris : " << a << endl;
     cout<<"masukan kolom : " << b << endl;
    
     for(int i=0;i<a;i++){
             for(int j=0;j<b;j++){
                     cout<<"masukan data array ke-["<<i<<"],["<<j<<"] : ";
                     cin>>data[i][j];}}
}

void array::proses(){
    int k=0;
     for(int i=0;i<a;i++){
             for(int j=0;j<b;j++){
                     e[k]=data[i][j];k=k+1;
                     }
                     }
                     }

void array::hasil(){
    int temp;
    cout<<"\n \n Data awal 2 dimensi yang input :"<<endl;
    cout<<"[";
     for(int i=0;i<a;i++){cout<<"[";
     for(int j=0;j<b;j++){
             cout<<data[i][j]<<" ";}cout<<"]" << " ";}
             cout<<"]";
     
     cout<<"\n \n Data yang sudah dikonversi menjadi 1 dimensi : "<<endl<<"[";
     for(int i=0;i<(a*b);i++){
             cout<<e[i]<<" ";
             }cout<<"]";cout<<endl;
             
             
     for(int i=0;i<(a*b); i++){
             for (int j=i;j<(a*b); j++){
                 if (e[i] < e[j])
                  {
                temp =  e[i];
                e[i] = e[j];
                e[j] = temp;
                 }
             }
             }
             
     
    cout<<"\n Data 1 dimensi yang telah di sorting descendig : \n" <<"[";
    for (int i = 0; i < (a*b); i++)
        cout<<e[i]<< " " ; 
        cout<<"]";cout<<endl;
        
    getch();
    
        }
int main(int argc, char * argv[])
{
    array x;
    x.awal();
    x.proses();
    x.hasil();
    system("PAUSE");
    return EXIT_SUCCESS;
}