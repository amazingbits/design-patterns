import ICep, { TypeCEP } from "./ICep";
import { fetchData } from "../../utils/FetchData";

export default class ViaCEP implements ICep {
  private url: string;
  constructor(cep: string) {
    this.url = `https://viacep.com.br/ws/${cep}/json/`;
  }

  async getInfo(): Promise<TypeCEP> {
    const response = await fetchData(this.url);
    return {
      cep: response.cep,
      state: response.uf,
      city: response.localidade,
      address: response.logradouro,
    };
  }
}
