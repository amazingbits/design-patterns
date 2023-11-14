import ICep, { TypeCEP } from "./ICep";
import { fetchData } from "../../utils/FetchData";

export default class BrasilAPI implements ICep {
  private url: string;
  constructor(cep: string) {
    this.url = `https://brasilapi.com.br/api/cep/v1/${cep}`;
  }

  async getInfo(): Promise<TypeCEP> {
    const response = await fetchData(this.url);
    return {
      cep: response.cep,
      state: response.state,
      city: response.city,
      address: response.street,
    };
  }
}
