#include <iostream>
using namespace std;
void garis (){
	cout<<"+===================================================+"<<endl; //hiasan dan tulisan menggunakan procedure
}
void dftr (){
	cout<<"+===================DAFTAR PEMBELIAN================+"<<endl;
}
void awal (){
	cout<<"+====================INPUT PEMBELIAN================+"<<endl;
}
int main()
{
char nm[100][100];
int hrg[100];
int jml;
awal();
cout<<"\nMasukan Jumlah Barang: ";
cin>>jml;
garis();
//input data
for (int i=1;i<=jml;i++){
cout<<"\nMasukan nama barang: ";
cin>>nm[i];
cout<<"Masukan Harga Barang: ";
cin>>hrg[i];
}
system("cls");
system ("color A");
//output data
garis();
dftr();
garis();
for (int a=1;a<=jml;a++){
cout<<"\nNama Barang: "<<nm[a]<<"  | Harga: Rp."<<hrg[a]<<endl;
}
return 0;
}
