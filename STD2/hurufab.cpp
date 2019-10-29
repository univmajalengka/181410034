/*	hurufab.cpp
  *	
  * Contoh inisialisasi array berdimensi dua
  */ 


#include <iostream>
#include <conio.h>
using namespace std;

int main()
{
	// pendefinisian array berdimensi dua
	// dan pemberian nilai awal

	int huruf_A[2][8][8] =
	{
		{
			{0, 1, 1, 1, 1, 1, 0, 0},
			{0, 1, 0, 0, 0, 1, 0, 0},
			{0, 1, 0, 0, 0, 1, 0, 0},
			{1, 1, 1, 1, 1, 1, 1, 0},
			{1, 1, 0, 0, 0, 0, 1, 0},
			{1, 1, 0, 0, 0, 0, 1, 0},
			{1, 1, 0, 0, 0, 0, 1, 0},
			{0, 0, 0, 0, 0, 0, 0, 0}
		},
		{
			{1, 1, 1, 1, 1, 1, 0, 0},
			{1, 0, 0, 0, 0, 1, 0, 0},
			{1, 1, 0, 0, 0, 1, 0, 0},
			{1, 1, 1, 1, 1, 1, 1, 0},
			{1, 0, 0, 0, 0, 0, 1, 0},
			{1, 0, 0, 0, 0, 0, 1, 0},
			{1, 1, 1, 1, 1, 1, 1, 0},
			{0, 0, 0, 0, 0, 0, 0, 0}
		}
	};
			
	int i, j, k;

	for (i = 0; i<2; i++)
	{
		for (j = 0; i<8; j++)
		{
			for (k = 0; k<8; k++)
				if (huruf_A[i][j][k] == 1)
			cout<< '\xDB';
			else
				cout<<'\x20';					//spasi
		cout<<endl;
									// pindah baris
		}	
	}
	return 0;
}
