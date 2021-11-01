#include <iostream>

using namespace std;

void bentukPersegi (int panjang_persegi){
    
    int i,j;
    double r = 2.0;
    cout << "Hasil bentuk persegi dari panjang persegi (bilangan ganjil),  " << panjang_persegi << " adalah : ";
    //cin >> panjang_persegi;
     cout << endl;
  if (panjang_persegi % 2 == 1){
            for(i=1;i<=panjang_persegi;i++) {
    for(j=1;j<=panjang_persegi;j++) {
      
      if (j == panjang_persegi/r + 0.5 ){
          cout  << "* ";
      }
      else if(i == panjang_persegi/r + 0.5 ){
          cout  << "* ";
      }
      else if (j == panjang_persegi and i == panjang_persegi){
           cout  << "* ";
      }
      else if (j == panjang_persegi and i == 1){
           cout  << "* ";
      }
      else if (j == 1 and i == panjang_persegi){
           cout  << "* ";
      }
      else if (j == 1 and i == 1){
           cout  << "* ";
      }
      else{
          cout  << "= ";
      }
    }
    cout << endl;
      }
    }
    else{
      cout << "Input Bilangan Ganjil dengan benar! \n\n";
    }
       
  
}

int main()
{
 cout << "##  Program C++ Bentuk Persegi dari Bintang(*) dan sama dengan(=)  ##" << endl;
  cout << "=======================================================" << endl;
  cout << endl;
  
 bentukPersegi(7);
   
    
  
 
  return 0;
}