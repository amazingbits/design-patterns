import ICep from "./services/cep/ICep";
import ViaCEP from "./services/cep/ViaCEP";
import BrasilAPI from "./services/cep/BrasilAPI";

async function clientCode(service: ICep) {
  console.log(await service.getInfo());
}

const viaCEP = new ViaCEP("01001000");
const brasilAPI = new BrasilAPI("01001000");

clientCode(viaCEP);
clientCode(brasilAPI);
