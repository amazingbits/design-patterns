import Notifier from "./Notifier";

export default interface BaseDecorator {
  sendMessage(wrapper: Notifier): void;
}
