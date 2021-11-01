
#include <iostream>

using namespace std;
void count_handshake(int num)
{
int result = 0;
   for ( int i = num-1 ; i >= 1 ; i-- ){
    result +=i;
  } 
 cout << result << endl;
}

int main()
{
    cout << "the result of handshake is : \n";
    count_handshake(3);
    count_handshake(6);
    return 0;
}
