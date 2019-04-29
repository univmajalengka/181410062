#include <iostream>
using namespace std;
int main()
{
	int a [4][4], b[4][4], c[4][4];
	cout<<"Masukan Nilai ke1:"<<endl;
	for (int i = 0; i < 4; i++)
	{
		for (int x = 0; x < 4; x++)
		{
			cin>>a[i][x];
		}
	}
	
	cout<<"Masukan Nilai ke2:"<<endl;
	for (int i = 0; i < 4; i++)
	{
		for (int x = 0; x < 4; x++)
		{
			cin>>b[i][x];
		}
	}

	//hitungan
	for (int i = 0; i < 4; i++)
	{
		for (int x = 0; x < 4; x++) 
		{
			c[i][x] = a[i][x] + b[i][x];
		}
	}
	
	//keluaran	
	cout<<"Keluaraan:"<<endl;
	for (int i = 0; i < 4; i++)
	{
		for (int x = 0 ; x < 4; x++)
		{
			cout<<c[i][x]<<"|";
		}
	cout<<"\n";
	}
	return 0;
}
