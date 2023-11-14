export type TypeCEP = {
  cep: string;
  state: string;
  city: string;
  address: string;
};

export default interface ICep {
  getInfo(): Promise<TypeCEP>;
}
