/*	hurufa.cpp
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

	int huruf_A[8][8] =
	{
		{0, 1, 1, 1, 1, 1, 0, 0},
		{0, 1, 0, 0, 0, 1, 0, 0},
		{0, 1, 0, 0, 0, 1, 0, 0},
		{1, 1, 1, 1, 1, 1, 1, 0},
		{1, 1, 0, 0, 0, 0, 1, 0},
		{1, 1, 0, 0, 0, 0, 1, 0},
		{1, 1, 0, 0, 0, 0, 1, 0},
		{0, 0, 0, 0, 0, 0, 0, 0}
	};
	int i, j;

	for (i = 0; i<8; i++)
	{
		for (j = 0; i<8; j++)	
			if (huruf_A[i][j] == 1)
			cout<< '\xDB';
			else
				cout<<'\x20';					//spasi
		cout<<endl;							// pindah baris
	}
	return 0;
}
