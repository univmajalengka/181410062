#include<iostream>
#include<string>
#include<sstream>
using namespace std;

	struct Motor
	{
		string Motor1;
		int harga;
	}Mtr1[3];

void printMtr(Motor Mtr);

int main ()
{
     string kendaraan;
     int x;
             for(x=0; x<3;x++)
             {
             cout<<"Masukkan Nama Motor : ";
             getline(cin,Mtr1[x].Motor1);
             cout<<"Masukkan Harga : Rp.";
             
             getline(cin,kendaraan);
             stringstream(kendaraan)>>Mtr1[x].harga;                    }
             
       cout<<"\nMotor yang Telah Diinput :\n";
       for(x=0;x<3;x++)
       printMtr(Mtr1[x]);   
     
return 0;

}

void printMtr(Motor Mtr)
{
	cout<<Mtr.Motor1<<"\t";
	cout<<"\tRp. "<<Mtr.harga<<",-\n";
}
