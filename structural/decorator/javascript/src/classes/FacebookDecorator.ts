import BaseDecorator from "./BaseDecorator";
import Notifier from "./Notifier";

export default class FacebookDecorator
  extends Notifier
  implements BaseDecorator
{
  constructor(wrapper: Notifier) {
    super();
    this.sendMessage(wrapper);
  }

  sendMessage(wrapper: Notifier): void {
    console.log("... applying logic for Facebook messages ...");
    wrapper.notify("message sent by Facebook");
  }
}
