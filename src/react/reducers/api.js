import {
  applyUpdate,
  pollingApplyUpdate,
  getNewestEntry,
} from '../utils/utils';

export const initialState = {
  loading: false,
  error: false,
  entries: {},
  newestEntry: false,
  nonce: false,
};

export const api = (state = initialState, action) => {
  switch (action.type) {
    case 'JUMP_TO_EVENT':
    case 'GET_ENTRIES':
    case 'GET_ENTRIES_PAGINATED':
      return {
        ...state,
        error: false,
        loading: true,
      };

    case 'GET_ENTRIES_SUCCESS':
      return {
        ...state,
        error: false,
        loading: false,
        entries: applyUpdate({}, action.payload.entries),
        newestEntry: getNewestEntry(
          state.newestEntry,
          action.payload.entries[0],
        ),
      };

    case 'GET_ENTRIES_FAILED':
      return {
        ...state,
        loading: false,
        error: true,
      };

    case 'POLLING_SUCCESS':
      return {
        ...state,
        error: false,
        entries: pollingApplyUpdate(
          state.entries,
          action.payload.entries,
          action.renderNewEntries,
        ),
        newestEntry: action.renderNewEntries
          ? getNewestEntry(state.newestEntry, action.payload.entries[0], state.entries)
          : state.newestEntry,
      };

    case 'CREATE_ENTRY_SUCCESS':
      return {
        ...state,
        error: false,
        nonce: action.payload.nonce,
      };

    case 'CREATE_ENTRY_FAILED':
      return {
        ...state,
        error: true,
      };

    case 'DELETE_ENTRY_SUCCESS':
      return {
        ...state,
        error: false,
        nonce: action.payload.nonce,
      };

    case 'DELETE_ENTRY_FAILED':
      return {
        ...state,
        error: true,
      };

    case 'UPDATE_ENTRY_SUCCESS':
      return {
        ...state,
        error: false,
        nonce: action.payload.nonce,
      };

    case 'UPDATE_ENTRY_FAILED':
      return {
        ...state,
        error: true,
      };

    case 'MERGE_POLLING_INTO_ENTRIES':
      return {
        ...state,
        entries: {
          ...action.payload,
          ...state.entries,
        },
      };

    case 'SCROLL_TO_ENTRY':
      return {
        ...state,
        entries: {
          ...state.entries,
          [action.payload]: {
            ...state.entries[action.payload],
            activateScrolling: true,
          },
        },
      };

    case 'RESET_SCROLL_ON_ENTRY':
      return {
        ...state,
        entries: {
          ...state.entries,
          [action.payload]: {
            ...state.entries[action.payload],
            activateScrolling: false,
          },
        },
      };

    default:
      return state;
  }
};
