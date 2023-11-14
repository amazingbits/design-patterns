import BaseDecorator from "./BaseDecorator";
import Notifier from "./Notifier";

export default class WhatsappDecorator
  extends Notifier
  implements BaseDecorator
{
  constructor(wrapper: Notifier) {
    super();
    this.sendMessage(wrapper);
  }

  sendMessage(wrapper: Notifier): void {
    console.log("... applying logic for Whatsapp messages ...");
    wrapper.notify("message sent by Whatsapp");
  }
}
